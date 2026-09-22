import { parseDesign, ConvertError } from './parse.mjs';
import { Mapper } from './mappers.mjs';
import { serializePattern } from './serialize.mjs';

/**
 * Converts design HTML to pattern PHP.
 * @returns {{ php?: string, meta?: object, errors: {line?: number, message: string}[] }}
 */
export function convertHtml(html, tokens) {
  try {
    const { meta, root } = parseDesign(html);
    const mapper = new Mapper(tokens, meta);
    const node = mapper.map(root);
    if (mapper.errors.length) return { meta, errors: mapper.errors };
    return { meta, php: serializePattern(meta, node), errors: [] };
  } catch (e) {
    if (e instanceof ConvertError) return { errors: [{ line: e.line, message: e.message }] };
    return { errors: [{ message: e.message }] };
  }
}
